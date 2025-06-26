export async function buscarUsuarios() {
  const response = await fetch('/api/usuarios')
  if (!response.ok) {
    throw new Error('Erro ao carregar usuários')
  }
  return await response.json()
}
