@extends('admin.master')

@section('title')
    Manage-Contact
@endsection

@section('main-content')
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
                <div class="col-sm-12">
                    <div class="alert alert-success alert-dismissible">
                        {{ Session::get('message') }}
                        <a class="close" data-dismiss="alert" >&times;</a>
                    </div>
                </div>
            @endif
            <div class="col-sm-12">
                <h3 class="text-primary text-center mt-5 mb-4 border-bottom border-info">Visitor's contact information table</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>SL No</th>
                            <th>Contact Name</th>
                            <th>Contact Email</th>
                            <th>Message</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->ur_message }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <a href="" class="text-success" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="{{ route('delete-contact', ['id' => $contact->coid] ) }}" class="text-danger" title="Delete"
                                   onclick=" return confirm('Are you sure to delete this !!') "><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


