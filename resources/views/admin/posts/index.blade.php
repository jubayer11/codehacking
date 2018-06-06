@extends('layouts.admin')
@section('content')

    <h1> posts  </h1>
     <table class="table">
         <thead>
           <tr>
             <th>Id</th>
               <th>OWNER</th>
               <th>Category id</th>
               <th>Photo </th>
               <th>Title</th>
               <th>body</th>
               <th>Created</th>
               <th>Updated</th>
           </tr>
         </thead>
         <tbody>
         @if($posts)
             @foreach($posts as $post)
           <tr>
             <td>{{$post->id}}</td>
               <td><img height="100px" src=" {{ URL::to('/') }}/images/{{$post->photo ? $post->photo['file']: 'no user photo'}}" alt="no photo"></td>
             <td>{{$post->user->name}}</td>
             <td>{{$post->category ? $post->category->name :'notcategorized'}}</td>
               <td> {{$post->title}}</td>
               <td>{{$post->body}}</td>
               <td>{{$post->created_at->diffForhumans()}}</td>
               <td> {{$post->updated_at->diffForhumans()}}</td>
           </tr>
             @endforeach
             @endif
         </tbody>
       </table>
    @stop