<x-layout>
    <x-slot:judul>{{$title}}</x-slot:judul>
    <h1 class="mb-3 font-bold">Student Page</h1>

    <div class="overflow-x-auto mt-4">
        <table class="table-auto w-full border-collapse border border-gray-300 min-w-max">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">Budi Pekerti</td>
                    <td class="border px-4 py-2">budianakbaik@gmail.com</td>
                    <td class="border px-4 py-2">Jl. Jupiter 03</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Ali Pertigaan</td>
                    <td class="border px-4 py-2">delealli@gmail.com</td>
                    <td class="border px-4 py-2">Jl. Liverpool 4321</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">Ahmad Sahroni</td>
                    <td class="border px-4 py-2">ahmad@@gmail.com</td>
                    <td class="border px-4 py-2">Jl. Rumah Dijarah</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">4</td>
                    <td class="border px-4 py-2">Mie Ayam</td>
                    <td class="border px-4 py-2">mieayamenak@gmail.com</td>
                    <td class="border px-4 py-2">Jl. makanan enak 123</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">5</td>
                    <td class="border px-4 py-2">Blender</td>
                    <td class="border px-4 py-2">Blender3d@gmail.com</td>
                    <td class="border px-4 py-2">Jl. maju mundur 321</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>