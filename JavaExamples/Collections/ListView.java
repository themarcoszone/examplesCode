import java.util.Arrays;
import java.util.LinkedList;


public class ListView{
	
	public static void main(String[] args){
		
		//An array containing brand of cars
		String[] cars = {"Volvo", "Volkswagen","Ford","Hitachi"};
		
		//Create a LinkedList with all elements from cars
		LinkedList<String> carlinks = new LinkedList<String>(Arrays.asList(cars));
		
		carlinks.addFirst("Ferrari");
		carlinks.addLast("Lamborghini");
		carlinks.add("BMW");
		carlinks.remove(2);
		//Assing to cars an array containing all elements from carlinks
		cars = carlinks.toArray(new String[ carlinks.size() ]);
		
		System.out.println("Cars Brands: ");
		
		for (String car: cars){
			System.out.println(car);
		}
	}
}
