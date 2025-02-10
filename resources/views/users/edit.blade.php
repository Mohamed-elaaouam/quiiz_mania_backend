<x-app-layout>


    <x-dashboard-layout>
    <div class="flex flex-col">

      <form class="text-left flex flex-col gap-4 my-5" method="post" action="{{route('users.update',["user"=>$user->id])}}">
          @method('PUT')
          @csrf
          <span>
              <label for="name">
                  Name
              </label>
              <input class="rounded-lg" id="name" name="name" type="text" value="{{$user->name}}" />

              @if($errors->has('name'))
              <span class=" text-red-500">{{$errors->first('name')}}</span>
              @endif
          </span>
          <span>
              <label for="email">
                  Email:
              </label>
              <input class="rounded-lg" disabled readonly name="email" id="email" type="text" value="{{$user->email}}" />
          </span>

          <span class="flex gap-2">
              <input type="submit" class="rounded-lg bg-black text-white w-[50px] dark:bg-white dark:text-white" value="Save" />

              @if(session('success'))

              <p class="text-green-400">{{session('success')}}</p>

              @endif
          </span>

      </form>
    </div>

    </x-dashboard-layout>



</x-app-layout>