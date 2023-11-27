const progressButtons = document.querySelectorAll('.progress-buttons button')

for (const button of progressButtons) {
  button.addEventListener('click', event => {
    const item_id = button.dataset.itemId
    const currentStatus = button.dataset.currentStatus
    const status = button.textContent.toLowerCase()

    if (status !== currentStatus) {
      const xhr = new XMLHttpRequest()
      xhr.open('POST', 'update_progress.php')
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
      xhr.onload = () => {
        if (xhr.status === 200) {
          const updatedButtons = document.querySelectorAll(
            `.progress-buttons button[data-item-id="${item_id}"]`
          )
          for (const updatedButton of updatedButtons) {
            updatedButton.dataset.currentStatus = status
            updatedButton.textContent = status
          }

          console.log('Progress information updated successfully!')

          // Insert data into the database here
          const data = `item_id=${item_id}&status=${status}`
          const xhrInsert = new XMLHttpRequest()
          xhrInsert.open('POST', 'insert_progress.php')
          xhrInsert.setRequestHeader(
            'Content-Type',
            'application/x-www-form-urlencoded'
          )
          xhrInsert.onload = () => {
            if (xhrInsert.status === 200) {
              console.log('Progress information inserted successfully!')
            } else {
              console.error('Error inserting progress information.')
            }
          }
          xhrInsert.send(data)
        } else {
          console.error('Error updating progress status.')
        }
      }

      const data = `item_id=${item_id}&status=${status}`
      xhr.send(data)
    }
  })
}
