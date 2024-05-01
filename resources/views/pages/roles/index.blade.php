<x-app-layout>
    <x-slot name="header">
            {{ __('Roles') }}
    </x-slot>
    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0"><a href="{{route('roles.add')}}" class="btn btn-sm btn-info ml-2">New Role +</a></div>

        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Name</th>
                    <th>Slug</th>
                    <th>Permissions</th>
                    <th>Link</th>
                    <th class="datatable-nosort">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                <tr>
                    <td class="table-plus">
                        {{ $role->name}}
                    </td>
                    <td>{{ $role->slug}}</td>
                    <td>
                        @if($role->rights_0)
                        <span class="badge badge-pill" data-bgcolor="#00e396d9" data-color="#265ed7">View Roles</span>
                        @else
                        <span class="badge badge-pill" data-bgcolor="#ff4560d9" data-color="#265ed7">View Roles</span>
                        @endif
                        @if($role->rights_1)
                        <span class="badge badge-pill" data-bgcolor="#00e396d9" data-color="#265ed7">View Instructions</span>
                        @else
                        <span class="badge badge-pill" data-bgcolor="#ff4560d9" data-color="#265ed7">View Instructions</span>
                        @endif
                        @if($role->rights_2)
                        <span class="badge badge-pill" data-bgcolor="#00e396d9" data-color="#265ed7">View Orders</span>
                        @else
                        <span class="badge badge-pill" data-bgcolor="#ff4560d9" data-color="#265ed7">View Orders</span>
                        @endif
                        @if($role->rights_3)
                        <span class="badge badge-pill" data-bgcolor="#00e396d9" data-color="#265ed7">View Finance</span>
                        @else
                        <span class="badge badge-pill" data-bgcolor="#ff4560d9" data-color="#265ed7">View Finance</span>
                        @endif
                        @if($role->rights_4)
                        <span class="badge badge-pill" data-bgcolor="#00e396d9" data-color="#265ed7">View Supplies</span>
                        @else
                        <span class="badge badge-pill" data-bgcolor="#ff4560d9" data-color="#265ed7">View Supplies</span>
                        @endif
                        @if($role->rights_5)
                        <span class="badge badge-pill" data-bgcolor="#00e396d9" data-color="#265ed7">View Settings</span>
                        @else
                        <span class="badge badge-pill" data-bgcolor="#ff4560d9" data-color="#265ed7">View Settings</span>
                        @endif
                    </td>
                    <td>@if($role->link){{ config('app.url').'/register?role='.$role->link}}@else disabled <a href="{{route('roles.generate',$role->id)}}" data-color="#265ed7"
                                ><i class="icon-copy fa fa-refresh" aria-hidden="true"></i></a> @endif</td>
                    <td>
                        <div class="table-actions">
                            <a href="{{route('roles.edit',$role->id)}}" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <a href="{{route('roles.delete',$role->id)}}" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</x-app-layout>
