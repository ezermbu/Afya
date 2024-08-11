<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('admin.dashboard') }}">
                        <x-application-logo class="h-8 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="ml-10 flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.dashboard') ? 'text-blue-500' : 'text-gray-500 hover:text-gray-700' }}">
                        {{ __('Dashboard') }}
                    </a>
                    <a href="{{ route('admin.users.index') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.users.*') ? 'text-blue-500' : 'text-gray-500 hover:text-gray-700' }}">
                        {{ __('Users') }}
                    </a>
                    <a href="{{ route('admin.roles.index') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.roles.*') ? 'text-blue-500' : 'text-gray-500 hover:text-gray-700' }}">
                        {{ __('Roles') }}
                    </a>
                    <a href="{{ route('admin.permissions.index') }}" class="px-3 py-2 text-sm font-medium {{ request()->routeIs('admin.permissions.*') ? 'text-blue-500' : 'text-gray-500 hover:text-gray-700' }}">
                        {{ __('Permissions') }}
                    </a>
                </div>
            </div>

            <!-- User Menu -->
            <div class="flex items-center">
                <span class="text-sm font-medium text-gray-500 mr-3">{{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm font-medium text-gray-500 hover:text-gray-700">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
