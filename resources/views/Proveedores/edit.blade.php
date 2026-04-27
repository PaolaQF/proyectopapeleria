@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado -->
            <div class="form-header">
                <h2>Editar Proveedor</h2>
                <p>Actualiza la información del Proveedor</p>
            </div>

            <!-- Formulario -->
            <div class="p-4 bg-white">
                <form method="POST" action="{{ route('proveedores.update', $proveedor->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="row g-4">

                        <div class="col-md-6">
                            <label for="nombre_comercial" class="form-label fw-semibold">Nombre Comercial:</label>
                            <input type="text" class="form-control rounded-3"
                                   id="nombre_comercial" name="nombre_comercial"
                                   value="{{ old('nombre_comercial', $proveedor->nombre_comercial) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="contacto_nombre" class="form-label fw-semibold">Nombre del Contacto:</label>
                            <input type="text" class="form-control rounded-3"
                                   id="contacto_nombre" name="contacto_nombre"
                                   value="{{ old('contacto_nombre', $proveedor->contacto_nombre) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="telefono" class="form-label fw-semibold">Teléfono:</label>
                            <input type="tel" class="form-control rounded-3"
                                   id="telefono" name="telefono"
                                   value="{{ old('telefono', $proveedor->telefono) }}"
                                   pattern="[0-9]{10}"
                                   maxlength="10"
                                   placeholder="Ej: 8441234567"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Email:</label>
                            <input type="email" class="form-control rounded-3"
                                   id="email" name="email"
                                   value="{{ old('email', $proveedor->email) }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="calle" class="form-label fw-semibold">Calle:</label>
                            <input type="text" class="form-control rounded-3"
                                   id="calle" name="calle"
                                   value="{{ old('calle', $proveedor->calle) }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="numero" class="form-label fw-semibold">Número:</label>
                            <input type="number" class="form-control rounded-3"
                                   id="numero" name="numero"
                                   value="{{ old('numero', $proveedor->numero) }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="colonia" class="form-label fw-semibold">Colonia:</label>
                            <input type="text" class="form-control rounded-3"
                                   id="colonia" name="colonia"
                                   value="{{ old('colonia', $proveedor->colonia) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="ciudad" class="form-label fw-semibold">Ciudad:</label>
                            <input type="text" class="form-control rounded-3"
                                   id="ciudad" name="ciudad"
                                   value="{{ old('ciudad', $proveedor->ciudad) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="rfc" class="form-label fw-semibold">RFC:</label>
                            <input type="text" class="form-control rounded-3"
                                   id="rfc" name="rfc"
                                   value="{{ old('rfc', $proveedor->rfc) }}"
                                   maxlength="13"
                                   pattern="[A-ZÑ&]{3,4}[0-9]{6}[A-Z0-9]{3}"
                                   placeholder="Ej: ABC123456T78"
                                   style="text-transform: uppercase;"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label for="dias_credito" class="form-label fw-semibold">Días de Crédito:</label>
                            <input type="number" class="form-control rounded-3"
                                   id="dias_credito" name="dias_credito"
                                   value="{{ old('dias_credito', $proveedor->dias_credito) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="estatus" class="form-label fw-semibold">Estatus:</label>
                            <select class="form-control rounded-3" id="estatus" name="estatus" required>

                                <option value="Activo"
                                    {{ old('estatus', $proveedor->estatus) == 'Activo' ? 'selected' : '' }}>
                                    Activo
                                </option>

                                <option value="Suspendido"
                                    {{ old('estatus', $proveedor->estatus) == 'Suspendido' ? 'selected' : '' }}>
                                    Suspendido
                                </option>

                            </select>
                        </div>

                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-3 shadow-sm">
                            Guardar Cambios
                        </button>

                        <a href="{{ route('proveedores.index') }}"
                           class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                            Volver
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection