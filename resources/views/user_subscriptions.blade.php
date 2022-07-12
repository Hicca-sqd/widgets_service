<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('menu.UsersSubscriptions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if( $user->is_admin )
                        пошел нахуй
                    @endif
                    @foreach($services as $service)
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{$service->name}}
                    </div>
                        @endforeach
                        {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
