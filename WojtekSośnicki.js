class Element {
    constructor(value, priority) {
        this.value = value;
        this.priority = priority;
    }
}
class PriorityQueue {
    constructor() {
        this.queue = [];
    }
    putElement(element, priority) {
        const newElement = new Element(element, priority);
        let added = false;
        for (let i = 0; i < this.queue.length; i++) {
            if (newElement.priority > this.queue[i].priority) {
                this.queue.splice(i, 0, newElement);
                added = true;
                break;
            }
        }
        if (!added) {
            this.queue.push(newElement);
        }
    }
    getElement() {
        if (this.queue.length === 0) {
            return null;
        }
        return this.queue.shift().value;
    }
}
const priorityQueue = new PriorityQueue();
priorityQueue.putElement('Jarek', 1);
priorityQueue.putElement('Konrad', 8);
priorityQueue.putElement('Paweł', 6);
priorityQueue.putElement('Boguś', 17);
priorityQueue.putElement('Stefan', 11);



console.log(priorityQueue.getElement());
console.log(priorityQueue.getElement());
console.log(priorityQueue.getElement());
console.log(priorityQueue.getElement());
console.log(priorityQueue.getElement());