@extends('component.layout')
@section('content')

@include('component.header')
        <div class="container mx-auto mt-10">
            <div class="row-auto">
                <div class="font-bold text-center">
                    <p class="text-3xl">Data Contacts</p>
                </div>
            </div>
            <div class="row-auto p-4">
                <div class="overflow-x-auto">
                    <table class="table  w-full border border-gray-300 rounded-lg">
                      <!-- head -->
                      <thead class="bg-primary">
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $index => $user )
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{$user['username']}}</td>
                                <td>{{$user['name']}}</td>
                                <td>{{$user['phone']}}</td>
                                <td>{{$user['email']}}</td>
                                <td><button class="btn bg-secondary px-6"> <a href="">Edit</a></button> <button class="btn bg-danger"> <a href="">Hapus</a></button></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
@endsection
