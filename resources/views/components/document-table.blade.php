<div>
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:px-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                      <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              Document
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              User
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                              <!-- Actions -->
                          </th>
                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                      @foreach ($documents as $document)
                      <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-500">{{ $document->filename }}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-500">{{ $document->user->name }}</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a href="{{ route('documents.create') }}" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                              Download<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                      </svg>
                          </a>
                          <a href="{{ route('documents.create') }}" class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                              Delete<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                          </a>
                          </td>
                      </tr>
                      @endforeach

                      <!-- More Items... -->
                  </tbody>
              </table>
              <div class="bg-white px-4 py-3 items-center justify-between">
                  {{ $documents->links() }}
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>