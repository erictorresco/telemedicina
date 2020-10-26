<form>
    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="grid grid-cols-6 gap-6">
            <div class="col-span-3 sm:col-span-2 lg:col-span-4 lg:col-start-1 lg:col-end-5">
                <label class="block text-sm font-medium leading-5 text-gray-700">
                Documento
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                <select name="tipo_identificacion" class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-orange-100 bg-gray-50 text-gray-500 text-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100" wire:model="tipo_identificacion">
                    <option>Tipo de documento</option>
                    <option>Cédula de ciudadanía</option>
                    <option>Tarjeta de Indentidad</option>
                </select>
                @error('tipo_identificacion') <span class="text-red-500">{{ $message }}</span>@enderror
                <input name="numero_identificacion" class="form-input flex-1 block w-full rounded-none rounded-r-md focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="123456789" wire:model="numero_identificacion">
                @error('numero_identificacion') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="nombres" class="block text-sm font-medium leading-5 text-gray-700">Nombres</label>
            <input id="nombres" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="nombres">
            @error('nombres') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="apellidos" class="block text-sm font-medium leading-5 text-gray-700">Apellidos</label>
            <input name="apellidos" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="apellidos">
            @error('apellidos') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-1">
            <label for="fecha_nacimiento" class="block text-sm font-medium leading-5 text-gray-700">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="fecha_nacimiento">
            @error('fecha_nacimiento') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-1">
            <label for="etnia" class="block text-sm font-medium leading-5 text-gray-700">Etnia</label>
            <select name="etnia" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="etnia">
                <option>Seleccione</option>
                <option>Mestizo</option>
            </select>
            @error('etnia') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>



          <div class="col-span-6 sm:col-span-3 lg:col-span-1">
            <label for="sexo" class="block text-sm font-medium leading-5 text-gray-700">Sexo</label>
            <select name="sexo" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="sexo">
                <option>Seleccione</option>
                <option>Másculino</option>
                <option>Femenino</option>
            </select>
            @error('sexo') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-1">
            <label for="estado_civil" class="block text-sm font-medium leading-5 text-gray-700">Estado civil</label>
            <select name="estado_civil" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="estado_civil">
                <option>Seleccione</option>
                <option>Soltero</option>
                <option>Casado</option>
                <option>Unión Libre</option>
            </select>
            @error('estado_civil') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-1">
            <label for="escolaridad" class="block text-sm font-medium leading-5 text-gray-700">Escolaridad</label>
            <select name="escolaridad" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="escolaridad">
                <option>Seleccione</option>
                <option>Básica primaria</option>
                <option>Básica Secundaria</option>
                <option>Superior</option>
            </select>
            @error('escolaridad') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-1">
            <label for="ocupacion" class="block text-sm font-medium leading-5 text-gray-700">Ocupación</label>
            <select name="ocupacion" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="ocupacion">
                <option>Seleccione</option>
                <option>Desarrollador de Software</option>
                <option>Agricultor</option>
            </select>
            @error('ocupacion') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>


          <div class="col-span-6 sm:col-span-6 lg:col-span-3">
            <label for="direccion" class="block text-sm font-medium leading-5 text-gray-700">Dirección</label>
            <input name="direccion" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="direccion">
            @error('direccion') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-4 sm:col-span-2 lg:col-span-1">
            <label for="zona_residencia" class="block text-sm font-medium leading-5 text-gray-700">Zona de residencia</label>
            <input name="zona_residencia" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="zona_residencia">
            @error('zona_residencia') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-4 sm:col-span-2 lg:col-span-1">
            <label for="departamento_residencia" class="block text-sm font-medium leading-5 text-gray-700">Departamento</label>
            <input name="departamento_residencia" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="departamento_residencia">
            @error('departamento_residencia') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-4 sm:col-span-2 lg:col-span-1">
            <label for="municipio_residencia" class="block text-sm font-medium leading-5 text-gray-700">Municipio</label>
            <input name="municipio_residencia" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="municipio_residencia">
            @error('municipio_residencia') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>


          <div class="col-span-6 sm:col-span-6 lg:col-span-3"">
            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Correo Electrónico</label>
            <input name="email" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="email">
            @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-4 sm:col-span-2 lg:col-span-1">
            <label for="telefono_fijo" class="block text-sm font-medium leading-5 text-gray-700">Teléfono fijo</label>
            <input name="telefono_fijo" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="telefono_fijo">
            @error('telefono_fijo') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>

          <div class="col-span-4 sm:col-span-2 lg:col-span-1">
            <label for="telefono_laboral" class="block text-sm font-medium leading-5 text-gray-700">Teléfono laboral</label>
            <input name="telefono_laboral" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="telefono_laboral">
            @error('telefono_laboral') <span class="text-red-500">{{ $message }}</span>@enderror

          </div>

          <div class="col-span-4 sm:col-span-2 lg:col-span-1">
            <label for="telefono_celular" class="block text-sm font-medium leading-5 text-gray-700">Teléfono celular</label>
            <input name="telefono_celular" class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="telefono_celular">
            @error('telefono_celular') <span class="text-red-500">{{ $message }}</span>@enderror

          </div>

          <div class="col-span-6 sm:col-span-6 lg:col-span-3">
            <label for="eps" class="block text-sm font-medium leading-5 text-gray-700">EPS</label>
            <select name="eps" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="eps">
                <option>Seleccione</option>
                <option>Salud Total</option>
                <option>Nueva EPS</option>
            </select>
            @error('eps') <span class="text-red-500">{{ $message }}</span>@enderror

          </div>

          <div class="col-span-6 sm:col-span-6 lg:col-span-3">
            <label for="regimen" class="block text-sm font-medium leading-5 text-gray-700">Régimen</label>
            <select name="regimen" class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-orange focus:border-orange-100 transition duration-150 ease-in-out sm:text-sm sm:leading-5" wire:model="regimen">
                <option>Seleccione</option>
                <option>Regimen Contributivo</option>
                <option>Regimen Subsidiado</option>
            </select>
            @error('regimen') <span class="text-red-500">{{ $message }}</span>@enderror
          </div>
        </div>
      </div>
      <div class="px-4 py-3 text-right sm:px-6">
        <button wire:click.prevent="store()" class="text-white rounded border-2 border-orange-100 bg-orange-400 px-4 py-1">Guardar</button>
      </div>
    </div>

  </form>
