<x-layout>
    <x-page-heading>Log In</x-page>

        <x-forms.form method="POST" actition="/login">

            <x-forms.input label='Your Name' name='name' />
            <x-forms.input label='Email' name='email' type='email' />
            <x-forms.input label='Password' name='password' type='password' />

            <x-forms.button>Log In</x-forms.button>

        </x-forms.form>
</x-layout>
