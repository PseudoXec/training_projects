
import java.util.Arrays;
import java.util.Scanner;
public class BubbleSort {

	public static void main(String[] args) {
		
		
		  Scanner sc = new Scanner(System.in);
		  System.out.print("Enter List Length: ");
		  int length = sc.nextInt();
		  
		  int a[]=new int[length];
		  System.out.println("Enter "+length+" Element to store in the List: ");
		  for(int i=0; i<length; i++)
		  {
			  a[i]=sc.nextInt();
		  }
		  System.out.print("\n"+"List BEFORE Bubble Sort: "); 	
		  System.out.println(Arrays.toString(a)+"\n");
		  
		  Scanner input = new Scanner (System.in);
	    	System.out.println("Sorting Options: ");
	        System.out.println("1 for Ascending \n2 for Descending " + "\n");
	        System.out.print("Choose Sorting Order: ");
			int sortOrder = input.nextInt();

		  if (sortOrder==1) {

			  System.out.println( "\n"+"-----------ASCENDING PROCESS-------------" + "\n"); 
		      Ascending(a);
		  }else {
			  System.out.println( "\n"+"-----------DESCENDING PROCESS------------" + "\n"); 
			 Descending(a);
		  } 
		  	  
		      System.out.print("List AFTER Bubble Sort: "); 	
		      System.out.println(Arrays.toString(a));
	    }  
	 
	    public static void Ascending(int[] unsorted){

	    	int i = 0;
	    	  for (i = 0; i<unsorted.length -1; i++) {
                for (int j = 0; j<unsorted.length -i-1; j++) {
                  if (unsorted[j] > unsorted[j+1]) 
                  {
                     int temp = unsorted[j];
                     unsorted[j] = unsorted[j+1];
                     unsorted[j+1] = temp;
	                }
	            }
	            System.out.printf("STEP %d %s %n", i+1, ":" + Arrays.toString(unsorted)+ "\n");
	        }
	            System.out.println("---------------RESULTS-------------------"+ "\n"); 
	            System.out.print("NUMBER OF STEPS: "); 	
			    System.out.println(i);
	    }

	    public static void Descending(int[] unsorted){
	
	                    int i;
						for (i = 0; i<unsorted.length -1; i++) {
	                      for (int j = 0; j<unsorted.length -i-1; j++) {
	                        if (unsorted[j] < unsorted[j+1]) 
	                        {
	                          int temp = unsorted[j];
	                          unsorted[j] = unsorted[j+1];
	                          unsorted[j+1] = temp;
	                        }
	                      }
	                      System.out.printf("STEP %d %s %n", i+1, ":" + Arrays.toString(unsorted)+ "\n");
	                    }
						  System.out.println("---------------RESULTS--------------------"+ "\n"); 
	        	          System.out.print("NUMBER OF STEPS: "); 	
	        			  System.out.println(i);
	    }
	   
	  }


