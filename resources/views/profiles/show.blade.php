<x-app>
    <header>
        <div class="relative mb-6">
            <img
                class="border rounded-lg w-full"
                src="/images/default-banner.jpg"
                alt=""
                style="height: 235px"
            >
            <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-1 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="width: 150px; left: 50%;"
            >
        </div>

        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ route('profiles.edit', $user) }}" class="rounded-full border border-gray-300 mr-2 py-2 px-4 text-sm">Edit profile</a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <p class="text-sm mb-2">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis est tempore delectus illum in, similique, architecto quibusdam velit enim recusandae ut labore assumenda repudiandae maiores. Exercitationem at tempora quis molestiae!
        </p>
    </header>
    @include ('_timeline', [
        'tweets' => $user->tweets
    ])
</x-app>
