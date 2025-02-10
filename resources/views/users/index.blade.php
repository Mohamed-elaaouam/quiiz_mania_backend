<x-app-layout>


    <x-dashboard-layout>
        <div class="m-5 flex flex-col">
          <div class="flex gap-3 ">
        
              
          <span > 
                
                
                <a class="p-2 mt-5 text-white bg-black  rounded-lg" href="{{route('users.create')}}"> Create User</a>
            </span>
            @if(session('success'))
      <p class="text-green-400">{{session('success')}}</p>
            @endif
          </div>

            <table class="text-left my-5  text-lg dark:text-white border-3 bg-white">
                <thead>
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
                </thead>
                <tbody>
                    @foreach ($users as $user )
                    <tr>

                        <td>
                            <img src="" alt="user_image" />
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

                        <td class="flex gap-1">
                            <a href="{{route('users.edit',["user"=>$user->id])}}"> Edit</a>
                            <form method="post" onsubmit="return confirm('user will be deleted,continue ?')"
                             action="{{route('users.destroy',
                            ["user"=>$user->id])}}">
                            @method('DELETE')
                            @csrf   
                            <input value="Delete" type="submit" />
                            </form>
                        

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </x-dashboard-layout>



</x-app-layout>