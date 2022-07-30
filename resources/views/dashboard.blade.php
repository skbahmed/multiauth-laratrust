<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @role('user')
                {{ __('Dashboard for user') }}
            @endrole

            @role('blogger')
                {{ __('Dashboard for blogger') }}
            @endrole
                
            @role('admin')
                {{ __('Dashboard for admin') }}
            @endrole
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @role('user')
                        {{ __('You are logged in as a User!') }}
                    @endrole

                    @role('blogger')
                        {{ __('You are logged in as a Blogger!') }}
                    @endrole

                    @role('user')
                        {{ __('You are logged in as an Admin!') }}
                    @endrole
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
