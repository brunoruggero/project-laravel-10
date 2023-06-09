@csrf()
<input type="text" name="subject" placeholder="Assunto" value="{{ $support->subject ?? old('subject') }}">
<textarea name="description" cols="30" rows="10" placeholder="Descrição">{{ $support->description ?? old('description') }}</textarea>
<button type="submit">Enviar</button>
