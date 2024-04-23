<x-app-layout>
    <x-slot name="header">
        {{ __('New Role') }}
    </x-slot>
    
    <div class="pd-20 card-box mb-30card-box pb-10">
        
        <form method="POST" action="{{route('roles.update')}}">
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Name*</label>
                <div class="col-sm-12 col-md-10">
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required placeholder="Role Name"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Slug*</label>
                <div class="col-sm-12 col-md-10">
                    <x-text-input id="slug" class="form-control" type="text" name="slug" :value="old('slug')" required placeholder="Role Slug"/>
                    <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                </div>
            </div>
            <div class="form-group">
                <label class="weight-600">Permissions</label>
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>

    
</x-app-layout>
