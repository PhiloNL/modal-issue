### Installation
```
npm install
npm run dev
```

### Modification
For this demo, you can modify the modal.js in the resources directory

```
resources/js/modal.js
```

### Steps to reproduce
1. Click one of the buttons to open a modal.
2. Click outside the modal to close it.
3. If you now try to open a new modal it is shown for a brief second before it disappears while the grey overlay stays visible.
4. If you click on the gray overlay it will disappear as well, but it will start to fire a Livewire XHR request indefinitely.

### Debugging
So far, I've found that removing `this.$wire.resetState();` (line 134 of modal.js) "fixes the problem", so it has to do something with the Livewire call to "resetState". Even if I empty this method (`resetState`) the problem still exists. So somehow the returned DOM triggers the `this.$watch('show)` to trigger indefinitely. 
