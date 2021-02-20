<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>USUARIO</th>
        <th>SLUG</th>
        <th>CONTENT</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->content }}</td>
        </tr>
    @endforeach
    </tbody>
</table>