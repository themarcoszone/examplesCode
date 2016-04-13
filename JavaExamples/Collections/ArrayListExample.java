import java.util.ArrayList;
import java.util.Collection;
import java.util.Iterator;
import java.util.List;


public class ArrayListExample {
	
	public static void main(String[] args){
		
		String[] bands = {"Nirvana", "Jamiroquai", "Guns and Roses", "Funkadelic Parliament"};
		List<String> bandList = new ArrayList<String>();
		
		//add elements from String array to List
		for (String band : bands){
			bandList.add(band);
		}
		
		String[] undesirableBands = {"Nirvana","Led Zepelling", 
				"The Strokes", "Jamiroquai"};
		List<String> undesirableList = new ArrayList<String>();
		
		//add elements from String array to List
		for (String undesirableBand : undesirableBands){
			undesirableList.add(undesirableBand);
		}
		
		System.out.println("List of bands has: ");
		for (int count = 0; count < bandList.size(); count++){
			System.out.printf("%s ", bandList.get(count));
		}
		
		removeBands(bandList, undesirableList);
		System.out.println("\n\nI just wish these bands: ");
		
		for (int count = 0; count < bandList.size(); count++){
			System.out.printf("%s ", bandList.get(count));
		}
	}
	
	public static void removeBands(Collection<String> bands, Collection<String> undesirableBands){
		Iterator<String> iteratorBand = bands.iterator();
		bands.add("Hello");
		while(iteratorBand.hasNext()){
			if(undesirableBands.contains(iteratorBand.next())){
				iteratorBand.remove();
			}
		}
	}
}
