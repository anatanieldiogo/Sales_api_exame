<?php

namespace App\Http\Controllers;

use App\Models\diretoria;
use App\Models\unidade;
use App\Models\venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


class VendaController extends Controller
{

    // Método responsavel pelo registro das vendas
    public function store(Request $request)
    {
        $attr = $request->validate([
            'valor_venda' => 'required',
            'diretoria_id' => 'required',
            'unidade_id' => 'required',
            'local' => 'required',
            'status' => 'required',
        ]);

        $sale = venda::query()->create([
            'vendedor_id' => auth()->user()->id,
            'valor_venda' => $attr['valor_venda'],
            'diretoria_id' => $attr['diretoria_id'],
            'unidade_id' => $attr['unidade_id'],
            'local' => $attr['local'],
            'status' => $attr['status'],
        ]);

        if ($sale) {
            return response()->json([
                'venda' => $sale
            ]);
        }

        return response()->json([
            'message' => 'Não foi possível registrar venda.'
        ]);
    }

    // Este método retorna as vendas de acordo ao nível de acesso do usuário
    public function sales()
    {
        $user = auth()->user();

        if (Gate::allows('diretor_geral', $user)) {

            $sales = venda::all();

            return response()->json([
                'vendas' => $sales
            ]);
        } elseif (Gate::allows('diretor', $user)) {

            $board = diretoria::where('diretor_id', $user->id)->first();
            $sales = venda::where('diretoria_id',  $board->id)->get();

            return response()->json([
                'vendas' => $sales
            ]);
        } elseif (Gate::allows('gerente', $user)) {

            $unity = unidade::where('gerente_id', $user->id)->first();
            $sales = venda::where('unidade_id',  $unity->id)->get();

            return response()->json([
                'vendas' => $sales
            ]);
        } elseif (Gate::allows('vendedor', $user)) {

            $sales = venda::where('vendedor_id',  $user->id)->get();

            return response()->json([
                'vendas' => $sales
            ]);
        }

        return response()->json([
            'message' => 'Acesso restrito.'
        ]);;
    }

    // Método responsavel pela pesquisa no sistema
    public function search(Request $request)
    {
        $data_inicio =  $request->data_inicio ? Carbon::createFromFormat('Y-m-d', $request->data_inicio)->startOfDay() : null;

        $data_fim = $request->data_fim ? Carbon::createFromFormat('Y-m-d', $request->data_fim)->endOfDay() : null;

        $search = venda::where('diretoria_id', $request->diretoria_id)
            ->orWhere('unidade_id', $request->unidade_id)
            ->orWhere('vendedor_id', $request->vendedor_id)
            ->orWhereBetween('created_at', [$data_inicio, $data_fim])
            ->get();

        return response()->json([
            'vendas' => $search
        ]);
    }
}
