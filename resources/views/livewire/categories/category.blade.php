<div class="mt-4">
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
