<x-app-layout>
    <x-slot name="header">
            {{ __('Roles') }}
    </x-slot>
    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">Recent Patient <a href="{{route('roles.add')}}" class="btn btn-sm btn-info ml-2">New Role +</a></div>

        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Name</th>
                    <th>Slug</th>
                    <th>Permissions</th>
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
                        <span class="badge badge-pill" data-bgcolor="#00e396d9" data-color="#265ed7">Dengue</span>
                        @else
                        <span class="badge badge-pill" data-bgcolor="#ff4560d9" data-color="#265ed7">Dengue</span>
                        @endif
                    </td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <a href="#" data-color="#e95959"
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
