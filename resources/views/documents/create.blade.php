<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight">
            Documents - Upload
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">Document</h3>
              <p class="mt-1 text-sm text-gray-600">
                Please upload your document. Filename is optional and will be taken from the uploaded file if no filename is provided.
              </p>
            </div>
          </div>
          <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                  <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                      <label for="filename" class="block text-sm font-medium text-gray-700"> Filename </label>
                      <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="filename" id="filename" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                      </div>
                    </div>
                  </div>
                  
                  <div>
                    <label class="block text-sm font-medium text-gray-700"> Document </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                      <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                          <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                          <label for="document" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="document" name="document" type="file" class="sr-only">
                          </label>
                        </div>
                        <p class="text-xs text-gray-500">.txt</p>
                      </div>
                    </div>
                    @error('document')
                    <div class="relative flex flex-col sm:flex-row sm:items-center mt-2 pt-2 bg-red-100 rounded">
                      <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-3">
                        <div class="text-red-500">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 sm:w-5 h-6 sm:h-5 ml-2" fill="red"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M288 256C288 273.7 273.7 288 256 288C238.3 288 224 273.7 224 256C224 238.3 238.3 224 256 224C273.7 224 288 238.3 288 256zM112 256C112 176.5 176.5 112 256 112C335.5 112 400 176.5 400 256C400 335.5 335.5 400 256 400C176.5 400 112 335.5 112 256zM256 336C300.2 336 336 300.2 336 256C336 211.8 300.2 176 256 176C211.8 176 176 211.8 176 256C176 300.2 211.8 336 256 336zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 64C149.1 64 64 149.1 64 256C64 362 149.1 448 256 448C362 448 448 362 448 256C448 149.1 362 64 256 64z"/></svg>
                        </div>
                        <div class="text-sm font-medium ml-3">File error</div>
                        <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">
                          {{ $message }}
                        </div>
                      </div>
                      
                    </div>
                    @enderror
                  </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>