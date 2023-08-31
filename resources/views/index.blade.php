@extends('layouts.master')
@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <p>All</p>
                <a class="btn btn-success" href="#">Create</a>
                <a class="btn btn-danger" href="#">Trash</a>
            </div>
            <div class="card-content">

                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width:10%">  Image</th>
                        <th scope="col" style="width:10%">  Title</th>
                        <th scope="col" style="width:30%">  Description</th>
                        <th scope="col" style="width:10%">  Categories</th>
                        <th scope="col" style="width:10%">  Publish Date</th>
                        <th scope="col" style="width:20%">  Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><img src="https://picsum.photos/200" alt="80"></td>
                        <td>Lorem, ipsum dolor.</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea corrupti quis architecto fugit sequi quam rem nobis perspiciatis quod assumenda minus sint animi adipisci sunt quidem dicta distinctio, repellendus repellat.</td>
                        <td>News</td>
                        <td>10-5-23</td>
                        <td>
                            <a class="btn btn-primary" href="#">Edit</a>
                            <a class="btn btn-danger" href="#">Delete</a>
                        </td>
                      </tr>

                  </table>

            </div>
        </div>
    </div>
@endsection
