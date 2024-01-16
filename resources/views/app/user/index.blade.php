<x-app-layout>
    <div class="content">
        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between">
                        <h1 class="font-bold text-lg my-2">
                            {{ __('Liste des utilisateurs') }}                            
                        </h1>

                        <a href="{{ route('user.create') }}">
                            <x-primary-button>
                                {{ __('Créer un utilisateur') }}
                            </x-primary-button>
                        </a>
                    </div>

                    <div class="mt-4">
                        <x-tables.default :resources="$users" :mattributes="$my_attributes" type="user" :mactions="$my_actions" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
