<x-alert/>
@csrf()
<div class="md:flex md:items-center mb-6">
    <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject ?? old('subject') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>
<div class="md:flex md:items-center mb-6">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $support->body ?? old('body') }}</textarea>
</div>
<div class="md:flex md:items-center mb-6">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Enviar</button>
</div>
