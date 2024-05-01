<style>

    th, td {
        border: solid;
        border-width: 1px;
        padding: 5px
    }

</style>

<x-admin-layout>

    <div class="flex flex-col w-full p-5 justify-center text-center" >

        <h1 class="text-3xl font-bold mb-5" >Logs</h1>

        <table class="w-full" >
            <thead class="bg-slate-50" >
                <tr>
                    <th>Description</th>
                    <th>User Id</td>
                    <th>Time Stamp</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    @forelse ($logs as $log)
                        <td>{{$log->description}}</td>
                        <td>{{$log->user_id}}</td>
                        <td>{{$log->created_at}}</td>
                    @empty

                    @endforelse
                </tr>
            </tbody>
        </table>
    </div>

</x-admin-layout>

