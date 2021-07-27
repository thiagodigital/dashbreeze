<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-100 waves-effect waves-float waves-light  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
