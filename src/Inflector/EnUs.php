<?php
// All creditis go to http://book.cakephp.org/2.0/en/core-utility-libraries/inflector.html
namespace Armenio\Inflector\Inflector;

use Armenio\Inflector\Inflector;

/**
 * EnUs
 * Helper for formatting en_US Strings.
 * 
 * @author Rafael Armenio <rafael.armenio@gmail.com>
 * @version 1.0
 */
class EnUs extends Inflector 
{

	/**
	 * Plural inflector rules
	 *
	 * @var array
	 */
	protected static $plural = [
		'rules' => [
			'/(s)tatus$/i' => '\1\2tatuses',
			'/(quiz)$/i' => '\1zes',
			'/^(ox)$/i' => '\1\2en',
			'/([m|l])ouse$/i' => '\1ice',
			'/(matr|vert|ind)(ix|ex)$/i'  => '\1ices',
			'/(x|ch|ss|sh)$/i' => '\1es',
			'/([^aeiouy]|qu)y$/i' => '\1ies',
			'/(hive)$/i' => '\1s',
			'/(?:([^f])fe|([lr])f)$/i' => '\1\2ves',
			'/sis$/i' => 'ses',
			'/([ti])um$/i' => '\1a',
			'/(p)erson$/i' => '\1eople',
			'/(m)an$/i' => '\1en',
			'/(c)hild$/i' => '\1hildren',
			'/(buffal|tomat)o$/i' => '\1\2oes',
			'/(alumn|bacill|cact|foc|fung|nucle|radi|stimul|syllab|termin|vir)us$/i' => '\1i',
			'/us$/i' => 'uses',
			'/(alias)$/i' => '\1es',
			'/(ax|cris|test)is$/i' => '\1es',
			'/s$/' => 's',
			'/^$/' => '',
			'/$/' => 's',
		],
		'uninflected' => [
			'.*[nrlm]ese', '.*deer', '.*fish', '.*measles', '.*ois', '.*pox', '.*sheep', 'people'
		],
		'irregular' => [
			'atlas' => 'atlases',
			'beef' => 'beefs',
			'brother' => 'brothers',
			'child' => 'children',
			'corpus' => 'corpuses',
			'cow' => 'cows',
			'ganglion' => 'ganglions',
			'genie' => 'genies',
			'genus' => 'genera',
			'graffito' => 'graffiti',
			'hoof' => 'hoofs',
			'loaf' => 'loaves',
			'man' => 'men',
			'money' => 'monies',
			'mongoose' => 'mongooses',
			'move' => 'moves',
			'mythos' => 'mythoi',
			'niche' => 'niches',
			'numen' => 'numina',
			'occiput' => 'occiputs',
			'octopus' => 'octopuses',
			'opus' => 'opuses',
			'ox' => 'oxen',
			'penis' => 'penises',
			'person' => 'people',
			'sex' => 'sexes',
			'soliloquy' => 'soliloquies',
			'testis' => 'testes',
			'trilby' => 'trilbys',
			'turf' => 'turfs'
		]
	];

	/**
	 * Singular inflector rules
	 *
	 * @var array
	 */
	protected static $singular = [
		'rules' => [
			'/(s)tatuses$/i' => '\1\2tatus',
			'/^(.*)(menu)s$/i' => '\1\2',
			'/(quiz)zes$/i' => '\\1',
			'/(matr)ices$/i' => '\1ix',
			'/(vert|ind)ices$/i' => '\1ex',
			'/^(ox)en/i' => '\1',
			'/(alias)(es)*$/i' => '\1',
			'/(alumn|bacill|cact|foc|fung|nucle|radi|stimul|syllab|termin|viri?)i$/i' => '\1us',
			'/([ftw]ax)es/i' => '\1',
			'/(cris|ax|test)es$/i' => '\1is',
			'/(shoe|slave)s$/i' => '\1',
			'/(o)es$/i' => '\1',
			'/ouses$/' => 'ouse',
			'/([^a])uses$/' => '\1us',
			'/([m|l])ice$/i' => '\1ouse',
			'/(x|ch|ss|sh)es$/i' => '\1',
			'/(m)ovies$/i' => '\1\2ovie',
			'/(s)eries$/i' => '\1\2eries',
			'/([^aeiouy]|qu)ies$/i' => '\1y',
			'/([lr])ves$/i' => '\1f',
			'/(tive)s$/i' => '\1',
			'/(hive)s$/i' => '\1',
			'/(drive)s$/i' => '\1',
			'/([^fo])ves$/i' => '\1fe',
			'/(^analy)ses$/i' => '\1sis',
			'/(analy|ba|diagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\1\2sis',
			'/([ti])a$/i' => '\1um',
			'/(p)eople$/i' => '\1\2erson',
			'/(m)en$/i' => '\1an',
			'/(c)hildren$/i' => '\1\2hild',
			'/(n)ews$/i' => '\1\2ews',
			'/eaus$/' => 'eau',
			'/^(.*us)$/' => '\\1',
			'/s$/i' => ''
		],
		'uninflected' => [
			'.*[nrlm]ese', '.*deer', '.*fish', '.*measles', '.*ois', '.*pox', '.*sheep', '.*ss'
		],
		'irregular' => [
			'waves' => 'wave'
		]
	];

	/**
	 * Words that should not be inflected
	 *
	 * @var array
	 */
	protected static $uninflected = [
		'Amoyese', 'bison', 'Borghese', 'bream', 'breeches', 'britches', 'buffalo', 'cantus',
		'carp', 'chassis', 'clippers', 'cod', 'coitus', 'Congoese', 'contretemps', 'corps',
		'debris', 'diabetes', 'djinn', 'eland', 'elk', 'equipment', 'Faroese', 'flounder',
		'Foochowese', 'gallows', 'Genevese', 'Genoese', 'Gilbertese', 'graffiti',
		'headquarters', 'herpes', 'hijinks', 'Hottentotese', 'information', 'innings',
		'jackanapes', 'Kiplingese', 'Kongoese', 'Lucchese', 'mackerel', 'Maltese', 'media',
		'mews', 'moose', 'mumps', 'Nankingese', 'news', 'nexus', 'Niasese',
		'Pekingese', 'Piedmontese', 'pincers', 'Pistoiese', 'pliers', 'Portuguese',
		'proceedings', 'rabies', 'rice', 'rhinoceros', 'salmon', 'Sarawakese', 'scissors',
		'sea[- ]bass', 'series', 'Shavese', 'shears', 'siemens', 'species', 'swine', 'testes',
		'trousers', 'trout','tuna', 'Vermontese', 'Wenchowese', 'whiting', 'wildebeest',
		'Yengeese'
	];

	/**
	 * Adds custom inflection $rules, of either 'plural', 'singular' or 'transliteration' $type.
	 *
	 * ### Usage:
	 *
	 * {{{
	 * Helper_Inflector::rules('plural', array('/^(inflect)or$/i' => '\1ables'));
	 * Helper_Inflector::rules('plural', array(
	 *	 'rules' => array('/^(inflect)ors$/i' => '\1ables'),
	 *	 'uninflected' => array('dontinflectme'),
	 *	 'irregular' => array('red' => 'redlings')
	 * ));
	 * Helper_Inflector::rules('transliteration', array('/å/' => 'aa'));
	 * }}}
	 *
	 * @param string $type The type of inflection, either 'plural', 'singular' or 'transliteration'
	 * @param array $rules Array of rules to be added.
	 * @param boolean $reset If true, will unset default inflections for all
	 *		new rules that are being defined in $rules.
	 * @access public
	 * @return void
	 */
	public static function rules($type, $rules, $reset = false) {
		$var = '_' . $type;

		switch ($type) {
			case 'transliteration':
				if ($reset) {
					self::$transliteration = $rules;
				} else {
					self::$transliteration = $rules + self::$transliteration;
				}
			break;

			default:
				foreach ($rules as $rule => $pattern) {
					if (is_array($pattern)) {
						if ($reset) {
							self::${$var}[$rule] = $pattern;
						} else {
							self::${$var}[$rule] = array_merge($pattern, self::${$var}[$rule]);
						}
						unset($rules[$rule], self::${$var}['cache' . ucfirst($rule)]);
						if (isset(self::${$var}['merged'][$rule])) {
							unset(self::${$var}['merged'][$rule]);
						}
					}
				}
				self::${$var}['rules'] = array_merge($rules, self::${$var}['rules']);
			break;
		}
	}

	/**
	 * Return $word in plural form.
	 *
	 * @param string $word Word in singular
	 * @return string Word in plural
	 * @access public
	 * @link http://book.cakephp.org/view/1479/Class-methods
	 */
	public static function pluralize($word) 
	{

		if (!isset(self::$plural['merged']['irregular'])) {
			self::$plural['merged']['irregular'] = self::$plural['irregular'];
		}

		if (!isset(self::$plural['merged']['uninflected'])) {
			self::$plural['merged']['uninflected'] = array_merge(self::$plural['uninflected'], self::$uninflected);
		}

		if (!isset(self::$plural['cacheUninflected']) || !isset(self::$plural['cacheIrregular'])) {
			self::$plural['cacheUninflected'] = '(?:' . implode('|', self::$plural['merged']['uninflected']) . ')';
			self::$plural['cacheIrregular'] = '(?:' . implode('|', array_keys(self::$plural['merged']['irregular'])) . ')';
		}

		if (preg_match('/(.*)\\b(' . self::$plural['cacheIrregular'] . ')$/i', $word, $regs)) {
			$result = $regs[1] . substr($word, 0, 1) . substr(self::$plural['merged']['irregular'][strtolower($regs[2])], 1);
			return $result;
		}

		if (preg_match('/^(' . self::$plural['cacheUninflected'] . ')$/i', $word, $regs)) {
			return $word;
		}

		foreach (self::$plural['rules'] as $rule => $replacement) {
			if (preg_match($rule, $word)) {
				$result = preg_replace($rule, $replacement, $word);
				return $result;
			}
		}
	}

	/**
	 * Return $word in singular form.
	 *
	 * @param string $word Word in plural
	 * @return string Word in singular
	 * @access public
	 * @link http://book.cakephp.org/view/1479/Class-methods
	 */
	public static function singularize($word) 
	{

		if (!isset(self::$singular['merged']['uninflected'])) {
			self::$singular['merged']['uninflected'] = array_merge(
				self::$singular['uninflected'], 
				self::$uninflected
			);
		}

		if (!isset(self::$singular['merged']['irregular'])) {
			self::$singular['merged']['irregular'] = array_merge(
				self::$singular['irregular'], 
				array_flip(self::$plural['irregular'])
			);
		}

		if (!isset(self::$singular['cacheUninflected']) || !isset(self::$singular['cacheIrregular'])) {
			self::$singular['cacheUninflected'] = '(?:' . join( '|', self::$singular['merged']['uninflected']) . ')';
			self::$singular['cacheIrregular'] = '(?:' . join( '|', array_keys(self::$singular['merged']['irregular'])) . ')';
		}

		if (preg_match('/(.*)\\b(' . self::$singular['cacheIrregular'] . ')$/i', $word, $regs)) {
			$result = $regs[1] . substr($word, 0, 1) . substr(self::$singular['merged']['irregular'][strtolower($regs[2])], 1);
			return $result;
		}

		if (preg_match('/^(' . self::$singular['cacheUninflected'] . ')$/i', $word, $regs)) {
			return $word;
		}

		foreach (self::$singular['rules'] as $rule => $replacement) {
			if (preg_match($rule, $word)) {
				$result = preg_replace($rule, $replacement, $word);
				return $result;
			}
		}

		return $word;
	}
}