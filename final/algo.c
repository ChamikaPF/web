#include<stdio.h>
#include<stdlib.h>
struct node{ float data; // data structure for a node
             struct node* next;   };
struct node* makeNode(float item){ // creates a node with item in data part - returns the node address
        struct node* temp=(struct node*)malloc(sizeof(struct node));
        if(!temp) return 0;
        temp->data=item;
        return temp;
}
struct node* addHead(struct node** list, float item){ // add a new node to the head end of a linked list
        struct node* new_node=makeNode(item);
        if(!new_node) return 0;
        new_node->next = *list;             // would this work for an empty list?? - check
        return *list=new_node;
}
struct node* addTail(struct node** list, float item){ // add a new node to the head end of a linked list
        struct node *p, *new_node=makeNode(item);
        if(!new_node) return 0;
        new_node->next = 0;             //new node is going to be the last
        if(!*list) return *list=new_node;        // if empty list update *list and return the same - exit from the function
        for(p=*list;p->next;p=p->next);     // if not empty list, get p points to the tail node
        return p->next=new_node;    // link new_node to the tail and return the address of the new_node same as p->next
}
struct node* insertNode(struct node** list, float item){ // insert a new node to a linked list
        struct node* new_node=makeNode(item);
        if(!new_node) return 0;
        if(!*list) {new_node->next = 0;
                    return *list=new_node;} // inserted node to an empty list
        new_node->next=(*list)->next;
        (*list)->next=new_node;

}

//Add Head 2
struct node* addHeadTwo(struct node** list, float item){
    insertNode(list,item);

}

//Add Tail 2

struct node* addTailTwo(struct node** list, float item){
    struct node *p;
    struct node* new_node=makeNode(item);
        if(!new_node) return 0;
        if(!*list) {new_node->next = 0;
                    return *list=new_node;}

    for(p=*list;p->next;p=p->next){
        return p->next=new_node;

    }
}

void display(struct node* list){ // diaply the contents of a linked list from head to tail.
    for(;list;list=list->next) printf(" : %f",list->data);
}

void main(void){
struct node* mylist=0;      // List is simply a pointer to the head node - initialized to an empty list
float data;
while(scanf("%f",&data))
    printf("%s",addHeadTwo(&mylist,data)?"\nItem added\n":"\nItem not added\n");

while(scanf("%f",&data))
    printf("%s",addTailTwo(&mylist,data)?"\nItem added\n":"\nItem not added\n");
display(mylist);
}
