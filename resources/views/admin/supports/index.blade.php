<h1>Listagem dos suportes</h1>

<a href="{{ route('supports.create') }}">Criar dúvida</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support['subject'] }}</td>
                <td>{{ $support['description'] }}</td>
                <td>{{ $support['status'] }}</td>
                <td>
                    <a href="{{ route('supports.show',$support['id']) }}">Detalhes</a> |
                    <a href="{{ route('supports.edit',$support['id']) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>