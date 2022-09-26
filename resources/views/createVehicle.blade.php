<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter un véhicule') }}
        </h2>
    </x-slot>

    <div>
        <div class="md:grid md:grid-cols-5 md:gap-6">
            <div class="md:col-span-1">
            </div>
            <div class="mt-5 md:mt-0 md:col-span-3">
                <form action="/vehicle" method="POST">
                @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brand" class="block text-sm font-medium text-gray-700">Marque</label>
                                    <input type="text" name="brand" id="brand" required="true" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('brand') is-invalid @enderror">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="model" class="block text-sm font-medium text-gray-700">Modèle</label>
                                    <input type="text" name="model" id="model" required="true" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('model') is-invalid @enderror">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="year" class="block text-sm font-medium text-gray-700">Année</label>
                                    <input type="number" name="year" id="year" required="true" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('year') is-invalid @enderror">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="power" class="block text-sm font-medium text-gray-700">Puissance</label>
                                    <input type="number" name="power" id="power" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="photo" class="block text-sm font-medium text-gray-700">
                                        Lien de la photo
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                            http://
                                        </span>
                                        <input type="text" name="photo" id="photo" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.photo.com">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="priceSale" class="block text-sm font-medium text-gray-700">Prix de vente</label>
                                    <input type="number" name="priceSale" id="priceSale" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6">
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Description
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Belle voiture ..."></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Petite description du véhicule.
                                    </p>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Ajouter
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>