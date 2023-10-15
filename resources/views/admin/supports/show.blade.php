@extends('admin.layouts.app')

@section('title', "Detalhes da Dúvida {$support->subject}")

@section('header')
<h1 class="text-lg text-black-500">Dúvida {{ $support->subject }}</h1>
@endsection

@section('content')


<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Assunto: {{ $support->subject }}</div>
        <p class="text-gray-700 text-base">
            {{ $support->body }}
        </p>
        <p class="text-gray-700 text-base">
            Status: {{  getStatusSupport($support->status) }}
        </p>
        <p class="text-gray-700 text-base my-4">
            <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                @csrf()
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" type="submit">Deletar</button>
            </form>
        </p>
    </div>
</div>



@endsection


