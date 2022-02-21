<div>
    <a href="{{ route('book.create') }}" class="btn btn-md btn-success mb-3">Tambah book</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr class="text-center">
                <th scope="col">Title</th>
                <th scope="col">Sinopsys</th>
                <th scope="col">Price</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $b)
                <tr>
                    <td>{{ $b->title }}</td>
                    <td>{{ $b->sinopsys }}</td>
                    <td>{{ $b->price }}</td>
                    <td class="text-center">
                        <a href="{{ route('book.edit', $b->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <button wire:click="destroy({{ $b->id }})" class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
</div>
