@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Users name</th>
                                <th>email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($userList as $user)
                                <tr>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $user->name }}</strong>
                                    </td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>{!! $user->status == 1
                                        ? '<span class="badge bg-label-primary me-1">Active</span>'
                                        : '<span class="badge bg-label-danger me-1">lock</span>' !!}
                                    </td>
                                    <td>
                                        {{-- <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div> --}}
                                        <div class="d-flex align-items-center">
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                class="mx-2">
                                                @csrf
                                                @method('DELETE')
                                                <button stype="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-success">Infor</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
