<h3
    onclick="javascript:window.open('{{ url('vapor-ui') }}', '_{{ $target }}')"
    class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline"
>
    <svg
        class="sidebar-icon"
        style="width: 1.75rem; height: 1.75rem; margin-right: 8px; margin-left: -4px;"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 40 40"
    >
        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.345 9h10.55L9.618 20 4.345 9zm21.099 0h10.55l-5.276 11-5.274-11z" fill="var(--sidebar-icon)" fill-opacity=".1"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.62 20h10.549l-5.275 11L9.62 20z" fill="var(--sidebar-icon)" fill-opacity=".22"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.169 20h10.55l-5.275 11-5.275-11z" fill="var(--sidebar-icon)" fill-opacity=".2"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.169 20H9.619l5.275-11 5.275 11z" fill="var(--sidebar-icon)" fill-opacity=".4"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.718 20h-10.55l5.276-11 5.274 11z" fill="var(--sidebar-icon)" fill-opacity=".4"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M25.444 31h-10.55l5.275-11 5.275 11z" fill="var(--sidebar-icon)" fill-opacity=".5"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.494 8.467A1 1 0 014.34 8h10.55a1 1 0 01.902.568l4.373 9.12 4.373-9.12A1 1 0 0125.44 8h10.55a1 1 0 01.902 1.432L26.345 31.424a1.001 1.001 0 01-.905.576H14.89a1 1 0 01-.902-.568l-10.55-22a1 1 0 01.056-.965zm21.95 2.846L29.13 19h-7.372l3.686-7.687zM5.934 10l3.686 7.687L13.306 10H5.933zm8.96 1.313L18.58 19h-7.372l3.686-7.687zM27.032 10l3.686 7.687L34.405 10h-7.373zm-1.588 18.687L21.758 21h7.372l-3.686 7.687zM23.855 30l-3.686-7.687L16.483 30h7.372zm-8.96-1.313L11.207 21h7.372l-3.686 7.687z" fill="var(--sidebar-icon)"/>
    </svg>
    <span class="sidebar-label">
        {{ $label ?? 'Vapor UI' }}
    </span>
</h3>
