<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if (Auth::user()->hasRole('user'))
                {{ __('Dashboard for user') }}
                
            @elseif (Auth::user()->hasRole('blogger'))
                {{ __('Dashboard for blogger') }}
                
            @elseif (Auth::user()->hasRole('admin'))
                {{ __('Dashboard for admin') }}
                
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> --}}
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    @if (Auth::user()->hasRole('user'))
                        {{ __('You are logged in as a User!') }}
                        
                    @elseif (Auth::user()->hasRole('blogger'))
                        {{ __('You are logged in as a Blogger!') }}
                        
                    @elseif (Auth::user()->hasRole('admin'))
                        {{ __('You are logged in as an Admin!') }}
                        
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
