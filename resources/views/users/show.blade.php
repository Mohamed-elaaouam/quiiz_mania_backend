<x-app-layout>


    <x-dashboard-layout>
        <table class="text-white">
            <tr>
                <th>
                    Image
                </th>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Status
                </th>
                <th>
                    Actions
                </th>

            </tr>
            @foreach ($users as $user )
            <tr>

                <td>
                    <img src="" alt="user_image"/>
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    status
                </td>

                <td>
                  <a href="{{route('users.edit',["user"=>$user->id])}}"> Edit</a>
                  <a href="{{route('users.destroy',["user"=>$user->id])}}"> Delete</a>

                </td>
            </tr>
            @endforeach
        </table>

    </x-dashboard-layout>



</x-app-layout>