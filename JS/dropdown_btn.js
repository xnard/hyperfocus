//Letter A
const statusButtonA = document.getElementById('statusButton-alphabet-a')
const clearSelectionButtonA = document.getElementById(
  'clearSelection-alphabet-a'
)
const dropdownItemsA = document.querySelectorAll('.dropdown-item')

// Function to update the selected status and its background color in localStorage
const updateSelectedStatus = (selectedStatus, backgroundColor) => {
  // Update the selected status and its background color in localStorage
  localStorage.setItem('selectedStatus-alphabet-a', selectedStatus)
  localStorage.setItem('backgroundColor-alphabet-a', backgroundColor)
}

// Retrieve the selected status and its background color from localStorage on page load
window.addEventListener('DOMContentLoaded', () => {
  const selectedStatus = localStorage.getItem('selectedStatus-alphabet-a')
  const backgroundColor = localStorage.getItem('backgroundColor-alphabet-a')
  if (selectedStatus && backgroundColor) {
    statusButtonA.textContent = selectedStatus
    statusButtonA.style.backgroundColor = backgroundColor
    statusButtonA.style.color = 'white' // Assuming the text color is always white for a selected status
  }
})

// Add event listeners for alphabet A dropdown
for (const item of dropdownItemsA) {
  item.addEventListener('click', event => {
    if (event.target.name === 'status') {
      const selectedStatus = event.target.value
      statusButtonA.textContent = selectedStatus

      let backgroundColor
      if (selectedStatus === 'Learned') {
        backgroundColor = 'blue'
      } else {
        backgroundColor = 'gray'
      }

      statusButtonA.style.backgroundColor = backgroundColor
      statusButtonA.style.color = 'white'

      // Update the selected status and its background color in localStorage
      updateSelectedStatus(selectedStatus, backgroundColor)
    }
  })
}

// Add event listener for clear selection button of alphabet A dropdown
clearSelectionButtonA.addEventListener('click', () => {
  statusButtonA.textContent = 'Select Status'
  statusButtonA.style.backgroundColor = 'gray'
  statusButtonA.style.color = 'black'

  // Remove the selected status and its background color from localStorage
  localStorage.removeItem('selectedStatus-alphabet-a')
  localStorage.removeItem('backgroundColor-alphabet-a')
})




//letter B
const statusButtonB = document.getElementById('statusButton-alphabet-b')
const clearSelectionButtonB = document.getElementById(
  'clearSelection-alphabet-b'
)
const dropdownItemsB = document.querySelectorAll('.dropdown-item')

// Function to update the selected status and its background color in localStorage
const updateSelectedStatusB = (selectedStatus, backgroundColor) => {
  // Update the selected status and its background color in localStorage
  localStorage.setItem('selectedStatus-alphabet-b', selectedStatus)
  localStorage.setItem('backgroundColor-alphabet-b', backgroundColor)
}

// Retrieve the selected status and its background color from localStorage on page load
window.addEventListener('DOMContentLoaded', () => {
  const selectedStatus = localStorage.getItem('selectedStatus-alphabet-b')
  const backgroundColor = localStorage.getItem('backgroundColor-alphabet-b')
  if (selectedStatus && backgroundColor) {
    statusButtonB.textContent = selectedStatus
    statusButtonB.style.backgroundColor = backgroundColor
    statusButtonB.style.color = 'white' // Assuming the text color is always white for a selected status
  }
})

// Add event listeners for alphabet B dropdown
for (const item of dropdownItemsB) {
  item.addEventListener('click', event => {
    if (event.target.name === 'status') {
      const selectedStatus = event.target.value
      statusButtonB.textContent = selectedStatus

      let backgroundColor
      if (selectedStatus === 'Learned') {
        backgroundColor = 'blue'
      } else {
        backgroundColor = 'gray'
      }

      statusButtonB.style.backgroundColor = backgroundColor
      statusButtonB.style.color = 'white'

      // Update the selected status and its background color in localStorage
      updateSelectedStatusB(selectedStatus, backgroundColor)
    }
  })
}

// Add event listener for clear selection button of alphabet B dropdown
clearSelectionButtonB.addEventListener('click', () => {
  statusButtonB.textContent = 'Select Status'
  statusButtonB.style.backgroundColor = 'gray'
  statusButtonB.style.color = 'black'

  // Remove the selected status and its background color from localStorage
  localStorage.removeItem('selectedStatus-alphabet-b')
  localStorage.removeItem('backgroundColor-alphabet-b')
})




//letter C
const statusButtonC = document.getElementById('statusButton-alphabet-c')
const clearSelectionButtonC = document.getElementById(
  'clearSelection-alphabet-c'
)
const dropdownItemsC = document.querySelectorAll('.dropdown-item')

// Function to update the selected status and its background color in localStorage
const updateSelectedStatusC = (selectedStatus, backgroundColor) => {
  // Update the selected status and its background color in localStorage
  localStorage.setItem('selectedStatus-alphabet-c', selectedStatus)
  localStorage.setItem('backgroundColor-alphabet-c', backgroundColor)
}

// Retrieve the selected status and its background color from localStorage on page load
window.addEventListener('DOMContentLoaded', () => {
  const selectedStatus = localStorage.getItem('selectedStatus-alphabet-c')
  const backgroundColor = localStorage.getItem('backgroundColor-alphabet-c')
  if (selectedStatus && backgroundColor) {
    statusButtonC.textContent = selectedStatus
    statusButtonC.style.backgroundColor = backgroundColor
    statusButtonC.style.color = 'white' // Assuming the text color is always white for a selected status
  }
})

// Add event listeners for alphabet B dropdown
for (const item of dropdownItemsC) {
  item.addEventListener('click', event => {
    if (event.target.name === 'status') {
      const selectedStatus = event.target.value
      statusButtonC.textContent = selectedStatus

      let backgroundColor
      if (selectedStatus === 'Learned') {
        backgroundColor = 'blue'
      } else {
        backgroundColor = 'gray'
      }

      statusButtonC.style.backgroundColor = backgroundColor
      statusButtonC.style.color = 'white'

      // Update the selected status and its background color in localStorage
      updateSelectedStatusC(selectedStatus, backgroundColor)
    }
  })
}

// Add event listener for clear selection button of alphabet C dropdown
clearSelectionButtonC.addEventListener('click', () => {
  statusButtonC.textContent = 'Select Status'
  statusButtonC.style.backgroundColor = 'gray'
  statusButtonC.style.color = 'black'

  // Remove the selected status and its background color from localStorage
  localStorage.removeItem('selectedStatus-alphabet-c')
  localStorage.removeItem('backgroundColor-alphabet-c')
})