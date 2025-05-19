<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Automobilių sąnaudų palyginimas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-2xl font-bold mb-6">Automobilių eksploatacijos skaičiuoklė</h1>

        <form x-data="calculator()" class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Automobilio A įvestys -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Automobilis A</h2>
                <label class="block mb-2">Pavadinimas
                    <input type="text" x-model="carA.name" class="w-full border p-2 rounded" />
                </label>
                <label class="block mb-2">Kaina (€)
                    <input type="number" x-model.number="carA.price" class="w-full border p-2 rounded" />
                </label>
                <!-- Kiti laukai čia -->
            </div>

            <!-- Automobilio B įvestys -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Automobilis B (elektra)</h2>
                <label class="block mb-2">Pavadinimas
                    <input type="text" x-model="carB.name" class="w-full border p-2 rounded" />
                </label>
                <label class="block mb-2">Kaina (€)
                    <input type="number" x-model.number="carB.price" class="w-full border p-2 rounded" />
                </label>
                <!-- Kiti laukai čia -->
            </div>

            <!-- Rezultatai -->
            <div class="col-span-2 bg-white p-4 rounded shadow mt-4">
                <h2 class="text-xl font-semibold mb-2">Rezultatai</h2>
                <p>Metinės kuro išlaidos A: <span x-text="annualFuelCost(carA) + ' €'"></span></p>
                <p>Metinės kuro išlaidos B: <span x-text="annualFuelCost(carB) + ' €'"></span></p>
            </div>
        </form>
    </div>

    <script>
        function calculator() {
            return {
                carA: {
                    name: '',
                    price: 0,
                    kmPerYear: 15000,
                    consumption: 7,
                    fuelPrice: 1.5,
                },
                carB: {
                    name: '',
                    price: 0,
                    kmPerYear: 15000,
                    consumption: 15,
                    fuelPrice: 0.16,
                },
                annualFuelCost(car) {
                    return ((car.kmPerYear / 100) * car.consumption * car.fuelPrice).toFixed(2);
                },
            }
        }
    </script>
</body>
</html>
