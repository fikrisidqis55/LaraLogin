@include('layouts.appafter')

@if(session('info'))
<div class="alert alert-success">
{{session('info')}}
</div>
@endif


<div class="container">
    <div class="row">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> -->

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Tanggal Diedit</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            @if(count($buku) > 0)
              @foreach($buku->all() as $buku)

            <tbody>
              <tr class="table-secondary">
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->created_at }}</td>
                <td>{{ $buku->updated_at }}</td>
                <td>
                  <a href="{{ url("/view/{$buku->id}") }}" class="btn btn-primary">View</a>
                  <a href="{{ url("/update/{$buku->id}") }}" class="btn btn-warning">Update</a>
                  <a href="{{ url("/delete/{$buku->id}") }}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            @endif
            </tbody>
          </table>

    </div>
</div>
