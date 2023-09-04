<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->title }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">There are no category.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {!! $categories->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </body>
</html>