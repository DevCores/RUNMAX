<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Role') }}
    </x-slot>
    
    <div class="pd-20 card-box mb-30card-box pb-10">
        
        <form method="POST" action="{{route('roles.update')}}">
            @csrf
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name*</label>
                <div class="col-sm-12 col-md-10">
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name',$role)" required placeholder="Role Name"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Slug*</label>
                <div class="col-sm-12 col-md-10">
                    <x-text-input id="slug" class="form-control" type="text" name="slug" :value="old('slug',$role)" required placeholder="Role Slug"/>
                    <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                </div>
            </div>
            <div class="form-group">
                <label class="weight-600">Permissions</label>
                <div class="row">
                    <input name="id" type="text" value="{{$role->id}}" hidden>
                    <div class="col-md-6 col-sm-12">
                        
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" name="rights_0" @if($role->rights_0) checked @endif value="1" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">View Roles</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" name="rights_1" @if($role->rights_1) checked @endif value="1" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">View Instructions</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" name="rights_2" @if($role->rights_2) checked @endif value="1" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">View Orders</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" name="rights_3" @if($role->rights_3) checked @endif value="1" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">View Finance</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" name="rights_4" @if($role->rights_4) checked @endif value="1" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5">View Supplies</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" name="rights_5" @if($role->rights_5) checked @endif value="1" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6">View Settings</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-info ml-2">Save</button>
        </form>
        
    </div>

    
</x-app-layout>
