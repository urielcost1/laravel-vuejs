<template>
  <div :class="styles.container">
    <h2 :class="styles.title">Usuários Cadastrados</h2>
    <div :class="styles.tableWrapper">
      <table :class="styles.table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="usuario in usuarios" :key="usuario.id">
            <td>{{ usuario.id }}</td>
            <td>{{ usuario.nome }}</td>
            <td>{{ usuario.email }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { buscarUsuarios } from './usuariosService'
import styles from './usuarios.module.css'

const usuarios = ref([])

onMounted(async () => {
  try {
    usuarios.value = await buscarUsuarios()
  } catch (error) {
    console.error('Erro ao carregar usuários:', error)
  }
})
</script>
