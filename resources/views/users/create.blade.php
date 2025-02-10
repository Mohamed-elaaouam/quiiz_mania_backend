<x-app-layout>


    <x-dashboard-layout>

        <form class="text-left flex rounded-lg p-5 bg-white  gap-4 my-5" method="post" action="{{route('users.store')}}">

            @csrf
            <span class="flex flex-col justify-around ">
                <label for="name">
                    Name
                </label>
                <label for="email">
                    Email:
                </label>
                <label for="password">
                    Password:
                </label>
                <label for="password_confirmation">
                    Password confirmation:
                </label>
                <label></label>
            </span>

            <span class="flex flex-col  gap-5 justify-around w-[300px] ">
                <input class="rounded-lg" id="name" name="name" type="text" value="{{old(key: 'name')}}" />

                @if($errors->has('name'))
                <span class=" text-red-500">{{$errors->first('name')}}</span>
                @endif

                <input class="rounded-lg" name="email" id="email" type="text" value="{{old('email')}}" />
                @if($errors->has('email'))
                <span class=" text-red-500">{{$errors->first('email')}}</span>
                @endif


                <input class="rounded-lg" name="password" id="password" type="password" value="{{old('password')}}" />
                @if($errors->has('password'))
                <span class=" text-red-500">{{$errors->first('password')}}</span>
                @endif
           

            <input class="rounded-lg" name="password_confirmation" id="password_confirmation" type="password" value="{{old('password_confirmation')}}" />
            @if($errors->has('password_confirmation'))
            <span class=" text-red-500">{{$errors->first('password_confirmation')}}</span>
            @endif

            <span class="flex flex-grow gap-2">
                <input type="submit" class="rounded-lg p-2 bg-black text-white  dark:bg-white dark:text-white"
                    value="Create" />

                @if(session('success'))

                <p class="text-green-400">{{session('success')}}</p>

                @endif
            </span>
            </span>
            </span>





        </form>

    </x-dashboard-layout>



</x-app-layout>