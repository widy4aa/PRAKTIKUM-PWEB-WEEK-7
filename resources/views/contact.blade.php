@extends('component.layout')
@section('content')

@include('component.header')
        <div class="container mx-auto mt-10">
            <div class="row-auto">
                <div class="font-bold text-center">
                    <p class="text-3xl">Data Contacts</p>
                </div>
            </div>
            <form action="/addContact" method="POST">
                @csrf
                @method('POST')
                <button class="btn bg-warning px-6">Tambah</button>
            </form>
            <div class="row-auto p-4">
                <div class="overflow-x-auto">
                    <table class="table  w-full border border-gray-300 rounded-lg">
                      <!-- head -->
                      <thead class="bg-primary text-center">
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="text-center">
                        @foreach ($users as $index => $user )
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{$user['username']}}</td>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['phone']}}</td>
                                <td>{{$user['email']}}</td>
                                <td>
                                    <form action="/delContact/{{$user['email']}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn bg-secondary px-10">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
@endsection
