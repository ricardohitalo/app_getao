
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{ $borderColor }}">
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="{{ $borderColor }}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{ $borderColor }}">
    <br>
    <select name="motivo_contato" class="{{ $borderColor }}">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea class="{{ $borderColor }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $borderColor }}">ENVIAR</button>
</form>

<div style="position:absolute; top:0px; width:100%; background:red;">
    <pre>
        {{ print_r($errors) }}
    </pre>
</div>