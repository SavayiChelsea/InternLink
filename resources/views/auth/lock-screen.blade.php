

<x-guest-layout>
    <div style="background-color: #1f2937; min-height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div style="background-color: #374151; max-width: 400px; width: 100%; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <h2 style="color: #fff; font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px;">{{ __('Locked') }}</h2>

            <!-- Lock screen form -->
            <form method="POST" action="{{ route('unlock-screen') }}">
                @csrf

                <div class="mt-4">
                    <label for="password" style="display: block; font-size: 14px; font-weight: 500; color: #e5e7eb; margin-bottom: 8px;">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" required style="width: 100%; padding: 12px; border: 1px solid #4b5563; border-radius: 4px; background-color: #1f2937; color: #e5e7eb; box-sizing: border-box;">
                    @error('password')
                        <span style="color: #f87171; font-size: 14px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" style="background-color: #2563eb; color: #fff; font-weight: bold; padding: 12px 20px; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">
                        {{ __('Unlock') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Inline JavaScript to prevent back navigation -->
    <script>
        // Prevent going back in history
        window.history.pushState(null, null, window.location.href);
        window.onpopstate = function () {
            window.history.forward();
        };
    </script>

</x-guest-layout>
